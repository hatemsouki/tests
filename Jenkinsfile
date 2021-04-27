pipeline {
    agent any

    stages {
      stage('Build') {
            steps {
                echo 'building'
                
                checkout([$class: 'GitSCM', branches: [[name: '*/master']],           extensions: [], userRemoteConfigs: [[url: 'https://github.com/hatemsouki/pfe.git']]])
              
            }
        }
          stage('test') {
            steps {
                echo 'test unitaire'
                
                sh './vendor/bin/phpunit  --log-junit results/phpunit/phpunit.xml'
            }
        }
    }
}
