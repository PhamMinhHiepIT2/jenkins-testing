pipelineJob('example_wordpress') {
    definition {
        cps {
            script("""
                pipeline {
                    agent any
                    stages {
                        stage('Checkout') {
                            steps {
                                git url: 'https://github.com/PhamMinhHiepIT2/jenkins-testing.git', branch: 'main'
                            }
                        }
                        stage('Docker build') {
                            steps {
                                script {
                                    sh '''
                                        cd stack-example-wordpress
                                        docker build .
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