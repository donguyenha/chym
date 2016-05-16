# -*- coding: utf-8 -*-
from subprocess import Popen, PIPE
import json
import wget
import os
import shlex
import urllib2

def upload_youtube(link,title,desc,keyword):
    #os.chdir('/home/hadn/donguyenha')
    os.chdir('/home/hadn/laravel')
    wget.download(link)
    file_mp4 = link.split("/")[-1]
    cmd = '/home/hadn/python/bin/python /home/hadn/donguyenha/donguyenha-upload-youtube.py --file "%s" --title "%s" --description "%s" --keywords "%s" --category=25' % (file_mp4, title, desc, keyword)
    cmd = shlex.split(cmd.encode('utf8'))
    print cmd
    try:
        up = Popen(cmd, stdout=PIPE)
        temp = up.communicate()
        print temp
        #: remove file which uploaded to youtube
        os.remove(file_mp4)
        return temp[0].split()[-4]
    except Exception as e:
        print str(e)
        pass

path = '/mnt/html_css3/chym/storage/app/'
dirs = os.listdir(path)
for file in dirs:
    try:
        f = '%s%s' % (path, file)
        with open(f) as f:
            temp = json.loads(f.read())

        link_mp4 = temp['link_mp4']
        title = temp['title']
        desc = '%s %s' % (temp['title'], temp['description'])
        keyw = temp['tags']
        videoId = upload_youtube(link_mp4,title,desc,keyw)
        # remove file in laravel folder
        url = 'http://backend.alobet68.com/posts/%s/%s/yt_update' % (temp['id'], videoId.split("'")[1])
        print url
        urllib2.urlopen(url)
    except Exception as e:
        print str(e)
        #pass
