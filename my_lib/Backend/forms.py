from django import forms

class loginform(forms.Form):
    username = forms.CharField(min_length=2,max_length=20,label='',widget=forms.TextInput(attrs={'placeholder': 'E-MAIL OR USERNAME'}))
    password = forms.CharField(min_length=2,max_length=20,label='',widget=forms.PasswordInput(attrs={'placeholder': 'PASSWORD'}))