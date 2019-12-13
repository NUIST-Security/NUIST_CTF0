# web
docker run  -p 1274:80 -p 1275:81 -p 1276:82 -v /root/NUIST_CTF0/problems/Web/docker1/conf.d:/etc/nginx/conf.d -v /root/NUIST_CTF0/problems/Web/docker1/www:/var/www --rm --name=nginx1 -d nginx:latest

docker run  -p 9000:9000 -v /root/NUIST_CTF0/problems/Web/docker1/www:/var/www --rm --name=php1 -d php:7.4-fpm

docker run  -p 1277:80 -v /root/NUIST_CTF0/problems/Web/docker2/conf.d:/etc/nginx/conf.d -v /root/NUIST_CTF0/problems/Web/docker2/www:/var/www --rm --name=nginx2 -d nginx:latest

docker run  -p 9001:9000 -v /root/NUIST_CTF0/problems/Web/docker2/www:/var/www --rm --name=php2 -d php:7.4-fpm

# pwn build
docker build -t littlepwn .

docker build -t easycanary .

docker build -t babyheap .

# pwn run
docker run -p 9999:9999 -h littlepwn --name=littlepwn -d --rm littlepwn
docker run -p 10000:9999 -h easycanary --name=easycanary -d --rm easycanary
docker run -p 10001:9999 -h babyheap --name babyheap -d --rm babyheap
