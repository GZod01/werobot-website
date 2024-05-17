import sqlite3
import re
con = sqlite3.connect("postsdatabase.sqlite3");
con.row_factory = sqlite3.Row
cur = con.cursor()

res = cur.execute("SELECT * FROM `posts`");
posts = res.fetchall();
for p in posts:
    slug = p["slug"]
    fileName = slug
    locale = "."+p["locale"] if p["locale"]=="en" else ""
    if locale==".en":
        quer = "SELECT slug FROM `posts` WHERE identifier='"+p["identifier"]+"' AND locale='fr'"
        print(quer)
        fileNameres = cur.execute(quer).fetchall()
        print(fileNameres)
        if len(fileNameres)>0:
            print(f"\n\n\n\nFile {slug} , {fileName} have an alternative {fileNameres[0]['slug']}\n\n\n\n");
            fileName = fileNameres[0]["slug"];
    fileName+=locale+".md"
    title = p["title"].replace("&lrsquo;","'");
    content = p["content"].replace("&lrsquo;","'").replace("\\n","\n").replace("\\\"","\"");
    created_at = p["created_at"].replace("&lrsquo;","'");
    updated_at = p["updated_at"].replace("&lrsquo;","'");
    description= p["description"].replace("&lrsquo;","'").replace("\\n","\n")
    image = p["image"].replace("&lrsquo;","'");
    filecontent = f"""---
title: "{title}"
date: {created_at}
lastupdate: {updated_at}
banner: "{image}"
slug: "{slug}"
description: " 
{description}
"
---
{content}
    """
    #print(f"\n\n\n{fileName}\n\n{filecontent}");
    f= open("./content/blog/"+fileName,"w")
    f.write(filecontent)
    f.close()





"""
`id` varchar(255) NOT NULL,
`title` varchar(255) NOT NULL,
`content` text NOT NULL,
`slug` varchar(255) NOT NULL,
`image` text NOT NULL,
`locale` varchar(255) NOT NULL,
`identifier` varchar(255) NOT NULL,
`description` varchar(255) DEFAULT NULL,
`user_id` varchar(255) DEFAULT NULL,
`created_at` datetime DEFAULT NULL,
`updated_at` datetime DEFAULT NULL,
`cover_mode` varchar(32) DEFAULT NULL,
`cover_offset` varchar(32) DEFAULT NULL
"""
