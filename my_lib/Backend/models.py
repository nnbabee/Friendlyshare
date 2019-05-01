from django.db import models


class Users(models.Model):
	username 	=  models.CharField(max_length=64 )
	password 	=  models.CharField(max_length=64)
	email 	=  models.CharField(max_length=50)
	def __unit__(self):
		return self.title
class Post(models.Model):
	FOOD ='food'
	MEDIA ='media'
	CAR ='car'
	TAGS='tags'
	TAG_CHOICES = (
	(FOOD,'food'),
	(MEDIA,'media'),
	(CAR,'car'),
)
	title	=  models.CharField(max_length=200)
	created	=  models.DateTimeField(auto_now_add=True)
	updated	=  models.DateTimeField(auto_now=True)
	owner_username  =  models.CharField(max_length=64 )
	member_name      =  models.CharField(max_length=64)
	member_number   = models.IntegerField()  
	description	 =  models.TextField(null=True,blank=True,max_length=1000)
	comment =  models.CharField(max_length=500)
	brand =  models.CharField(max_length=1)
	tag =  models.CharField(max_length=100,choices=TAG_CHOICES,default =TAGS)
	
	def __str__(self):
		return self.title


















