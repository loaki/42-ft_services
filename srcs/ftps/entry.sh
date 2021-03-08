openssl req \
-x509 -nodes -days 365 -newkey rsa:2048 \
-keyout /etc/ssl/private/services.key \
-out /etc/ssl/certs/services.crt \
-subj "/C=FR/ST=PARIS/O=42/CN=$HOST_IP"
adduser --disabled-password $USER
echo "$USER:$PASSWORD" | chpasswd
vsftpd /etc/vsftpd/vsftpd.conf