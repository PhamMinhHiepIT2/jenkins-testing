pipelineJob('example_wordpress') {
    definition {
        cps {
            script("""
                IMAGE_TAG_POSTFIX=\$(date +%Y-%m-%d-%H-%M-%S`)
                pipeline {
                    agent {
                        label 'default'
                    }
                    stages {
                        stage('Checkout') {
                            steps {
                                git url: 'https://github.com/PhamMinhHiepIT2/jenkins-testing.git', branch: 'main'
                            }
                        }
                        stage('Docker build & push') {
                            steps {
                                script {
                                    withCredentials([usernamePassword(credentialsId: 'dockerhub', passwordVariable: 'DOCKER_PASS', usernameVariable: 'DOCKER_USER')]) {
                                        sh '''
                                            cd wpsite
                                            
                                            docker build -t phamhiep/wpsite:latest-\$IMAGE_TAG_POSTFIX .
                                            docker login -u \${DOCKER_USER} -p \${DOCKER_PASS}
                                            docker push phamhiep/wpsite:latest-\$IMAGE_TAG_POSTFIX
                                        '''
                                    }
                                }
                            }
                        }

                        stage('Deploy application') {
                            steps {
                                script {
                                    sh '''
                                        cd ansible
                                        ansible-playbook -i inventories/test/hosts.ini playbooks/test/deploy.yml -e new_image_tag=latest-\$IMAGE_TAG_POSTFIX --vault-password-file .ansible_vault_pass 
                                    '''
                                }
                            }
                        }
                    }
                }
                """)
            sandbox()
        }
    }
}