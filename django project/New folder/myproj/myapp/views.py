from django.shortcuts import render
from django.http import HttpResponse
from . models import Insertmarks
from . models import Qaa

# Create your views here.
def demo(r):
    data=Insertmarks.objects.all()
    params={'da':data}
    return render(r,'home.html',params)
def cprog(request):
    data=Qaa.objects.all()
    params={'da':data}
    return render(request,'cprog.html',params)
def java(request):
    data=Qaa.objects.all()
    params={'da':data}  
    return render(request,'java.html',params)
def python(request):
    data=Qaa.objects.all()
    params={'da':data}  
    return render(request,'python.html',params)
