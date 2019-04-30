from django.views.generic import TemplateView
from django.shortcuts import render
from django.http.response import HttpResponseRedirect
from Backend import forms

# Create your views here.
def home(request):
    return render(request,'home.html',)

class loginview(TemplateView):
    template_name = 'loginPage.html'

    def get(self,request):
        form = forms.loginform()
        return render(request, self.template_name, {'form':form})

    def post(self,request):
        form = forms.loginform(request.POST)
        if form.is_valid():
            # process the data in form.cleaned_data as required
            text = form.cleaned_data['username']
            text2 = form.cleaned_data['password']
            # redirect to a new URL:
        
            args = {'form' : form , 'text': text, 'text2':text2}
            return render(request, self.template_name , args)

def profile(request):
    return render(request,'profile.html')