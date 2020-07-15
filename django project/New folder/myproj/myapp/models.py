from django.db import models

# Create your models here.
# py manage.py makemigrations py manage.py migrate complusory when make changes
class Insertmarks(models.Model):
    URNO=models.IntegerField()
    UNAME=models.CharField(max_length=30)
    UPHY=models.IntegerField()
    UCHE=models.IntegerField()
    UMATHS=models.IntegerField()
    # this method with set the name of table as roll number
    def __str__(self):
        return str(self.URNO)

class Qaa(models.Model):
    la=(('j','java'),('p','python'),('c','C prog'))
    lang=models.CharField(max_length=1,choices=la)
    question=models.CharField(max_length=300)
    ans=models.TextField()
    def __str__(self):
        return str(self.question)

