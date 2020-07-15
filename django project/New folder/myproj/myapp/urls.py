from django.contrib import admin
from django.urls import path
from . import views 

urlpatterns = [
    path('', views.demo,name="home"),
	path('cprog/', views.cprog,name="cprog"),
	path('java/', views.java,name="java"),
	path('python/', views.python,name="python"),
	
]
