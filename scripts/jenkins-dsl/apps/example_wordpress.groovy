pipelineJob('example_wordpress') {
    definition {
        cps {
            script("""
                
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
                                            cd example-wordpress
                                            docker build -t phamhiep/wordpress-example:latest .
                                            docker login -u \${DOCKER_USER} -p \${DOCKER_PASS}
                                            docker push phamhiep/wordpress-example:latest
                                            
                                        '''
                                    }
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