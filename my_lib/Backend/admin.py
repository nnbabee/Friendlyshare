from django.contrib import admin
from . import models
admin.site.site_title = 'FRIENDLYSHARE'
admin.site.site_header = 'FRIENDLYSHARE Administration'
admin.site.register(models.Users)
admin.site.register(models.Post)