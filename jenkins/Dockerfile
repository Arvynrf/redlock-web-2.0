FROM jenkins/jenkins
USER root
RUN apt-get update
RUN apt-get -y install openssh-client
RUN apt-get -y install sshpass
# RUN ssh-keygen -q -t rsa -N '' -f /id_rsa