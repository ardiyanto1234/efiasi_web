pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'npm install'  // Use 'sh' for Linux/Mac
                    } else {
                        bat 'npm install'  // Use 'bat' for Windows
                    }
                }
            }
        }
        stage('Build Project') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'npm run build'  // Use 'sh' for Linux/Mac
                    } else {
                        bat 'npm run build'  // Use 'bat' for Windows
                    }
                }
            }
        }
    }
}
