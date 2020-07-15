from django.contrib import admin
from . models import Insertmarks
from . models import Qaa

# Register your models here.

admin.site.register(Insertmarks)
admin.site.register(Qaa)
admin.site.site_header='Softwaves Admin'
admin.site.index_title='Welcome to Softwaves Portal'

