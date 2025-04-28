pipeline {
    agent any
    stages {
        stage('Check Node.js and npm') {
            steps {
                script {
                    // Check if node and npm are available
                    def nodeCheck = sh(script: 'which node', returnStatus: true)
                    def npmCheck = sh(script: 'which npm', returnStatus: true)
                    
                    if (nodeCheck != 0 || npmCheck != 0) {
                        error("Node.js or npm is not installed on this system!")
                    }
                }
            }
        }
        stage('Install Dependencies') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'npm install'  // Run npm install on Unix-based systems
                    } else {
                        bat 'npm install'  // Run npm install on Windows-based systems
                    }
                }
            }
        }
        stage('Build Project') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'npm run build'  // Run build on Unix-based systems
                    } else {
                        bat 'npm run build'  // Run build on Windows-based systems
                    }
                }
            }
        }
    }
}
