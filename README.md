# kingspringchinese.com

Source code for kingspringchinese.com

## Deploying using docker
Build docker image by first cloning repo, building image, and running the image.
* `git clone https://roastlechon@bitbucket.org/roastlechon/kingspringchinese.com.git`
* `sudo docker build -t kingspringchinese.com .`
* `sudo docker run -p 80:80 -d kingspringchinese.com /sbin/my_init`