etherpad-translate
======================

This is a simple php application designed to work in combination with etherpad-lite used as a translation platform between english and taiwanese-chinese. The code is very specific to that usage but will evolve in more genericity. The scope of that application is to be able to ahndle less than one hundred documents at the same time, with anonymous translators and no authentication whatsoever.

The security level of that application is pretty low, and you should be careful if you want to appropriate it for your won usage.

That small piece of code was first created to fit the translation needs of http://twval.org

Conventions
--------------
- Pages to be translated will be prefixed with `(lang-code)_`
- there has to be a `(lang-code)_home` which will contain the homepage with instructions for tralsators
- there has to be a pad named `glossary` containing the glossary of terms so translators can enforce consistency


Copyright
----------
Copy is right (c) mose 2015. 

License
-----------
MIT license apply. Download and use as you want.
