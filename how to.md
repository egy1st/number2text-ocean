# download latest doctl 
from https://github.com/digitalocean/doctl/releases the windows version and place it in your repo

# run cmd as adminstrator 

cd C:\Users\moham\Documents\GitHub\number2words

then run
- doctl serverless install
- doctl serverless connect
- doctl serverless deploy
- doctl serverless functions invoke number2words/v1


# create a new repository on the command line
echo "# zerobytes" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/egy1st/zerobytes.git
git push -u origin main


# push an existing repository from the command line
git remote add origin https://github.com/egy1st/zerobytes.git
git branch -M main
git push -u origin main