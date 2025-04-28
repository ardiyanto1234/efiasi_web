pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                checkout scm  // Checkout the code from the repository
            }
        }
        stage('Build efiasi_web') {
            steps {
                script {
                    // Trigger the build of 'efiasi_web' project
                    build job: 'efiasi_web', wait: true  // Set wait to true if you want to wait for the build to finish
                }
            }
        }
    }
}
