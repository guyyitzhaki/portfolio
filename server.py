# -*- coding: utf-8 -*-
from bottle import hook, route, run, static_file, request, response, redirect, HTTPError
import json, math, datetime
import os
import glob
import mysql.connector

fields = ['id', 'name', 'short_description', 'long_description', 'year', 'icon', 'tags']


@route('/')
def index():
    redirect('static/index.html')


@route('/favicon.ico')
def favicon():
    return send_static('favicon.ico')


@route('/static/:filename#.+#')
def send_static(filename):
    return static_file(filename, root='static')


@route('/uploaded/:filename#.+#')
def send_uploaded(filename):
    return static_file(filename, root='uploaded')


def connectdb():
	config = {
		'user': 'root',
  		'password': 'root',
  		'unix_socket': '/Applications/MAMP/tmp/mysql/mysql.sock',
  		'database': 'dev',
  		'raise_on_warnings': True,
		}
	return mysql.connector.connect(**config)
	

@route('/get')
def get_projects():
	query = "SELECT * FROM projects	 WHERE 1"
	return run_query(query)
		
		
@route('/search')
def get_projects():
	text = request.query['search-text']
	print(text)
	query = "SELECT * FROM projects	 WHERE name LIKE '%" + text + "%' OR short_description LIKE '%" + text + "%' OR long_description LIKE '%" + text + "%'";
	return run_query(query)
	
def run_query(query):
	db = connectdb()
	cursor = db.cursor() 
	cursor.execute(query)
	result = cursor.fetchall()
	response = []
	for row in result:
		item = {}
		for i in range(len(fields)):
			r = row[i]
			if type(r) == str:
				r = r.encode('utf-8')
			item[fields[i]] = r
		response.append(item)
	cursor.close()
	db.close()
	return {'projects': response}
		
				
@route('/lastupdated')
def get_lastupdated():
	query = "SELECT max(modified) FROM projects"
	db = connectdb()
	cursor = db.cursor() 
	cursor.execute(query)
	result = cursor.fetchall()
	response = []
	first = result[0]
	time = unix_time(first[0])
	response.append(time)
	cursor.close()
	db.close()
	return {'last_updated': response}		

def unix_time(dt):
    epoch = datetime.datetime.utcfromtimestamp(0)
    delta = dt - epoch
    return delta.total_seconds()
    
@hook('after_request')
def enable_cors():
    response.headers['Access-Control-Allow-Origin'] = '*'
	
	
run(host='localhost', port=8080, debug=True)
 


