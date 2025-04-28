pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'composer install'  // Install dependencies menggunakan Composer di Linux
                    } else {
                        bat 'composer install'  // Install dependencies menggunakan Composer di Windows
                    }
                }
            }
        }
        stage('Start Development Server') {
            steps {
                script {
                    if (isUnix()) {
                        sh 'php artisan serve --host=0.0.0.0 --port=8000'  // Menjalankan server Laravel di Linux
                    } else {
                        bat 'php artisan serve --host=0.0.0.0 --port=8000'  // Menjalankan server Laravel di Windows
                    }
                }
            }
        }
    }
}
