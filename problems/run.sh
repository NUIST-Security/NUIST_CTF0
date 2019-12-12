# web
docker run -p 1274:80 -p 1275:81 -p 1276:82 -p 1277:83 -v /root/NUIST_CTF0/problems/Web/conf.d:/etc/nginx/conf.d -v /root/NUIST_CTF0/problems/Web/www:/var/www --rm --name=nginx -d nginx:latest
docker run -p 9000:9000 -v /root/NUIST_CTF0/problems/Web/www:/var/www --rm --name=php -d php:7.4-fpm

# pwn build
cd /root/NUIST_CTF0/problems/Pwn/little_Pwn/ctf_xinetd
docker build -t littlepwn .

cd /root/NUIST_CTF0/problems/Pwn/Easy_Canary/ctf_xinetd
docker build -t easycanary .

cd /root/NUIST_CTF0/problems/Pwn/Baby_Heap/ctf_xinetd
docker build -t babyheap .

# pwn run
docker run -p 9999:9999 -h littlepwn --name=littlepwn -d --rm littlepwn
docker run -p 10000:9999 -h easycanary --name=easycanary -d --rm easycanary
docker run -p 10001:9999 -h babyheap --name babyheap -d --rm babyheap
