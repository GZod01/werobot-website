import sqlite3
import re
con = sqlite3.connect("images.sqlite3");
con.row_factory = sqlite3.Row
cur = con.cursor()

res = cur.execute("SELECT * FROM `images`");
images = res.fetchall();
for i in images:
    
    


"""
`id` varchar(255) NOT NULL,
`caption` varchar(255) DEFAULT NULL,
`type` varchar(255) DEFAULT NULL,
`extension` varchar(255) DEFAULT NULL,
`created_at` datetime DEFAULT NULL,
`updated_at` datetime DEFAULT NULL,
`hash` varchar(255) DEFAULT NULL
"""
