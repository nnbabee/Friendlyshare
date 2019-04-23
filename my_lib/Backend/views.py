from django.shortcuts import render
from django.http.response import HttpResponse

# Create your views here.
def home(request):
    return render(request,'home.html')

def login(request):
    return render(request,'loginPage.html')

def profile(request):
    return render(request,'profile.html')