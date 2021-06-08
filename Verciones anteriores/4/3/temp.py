import sys
from textblob.classifiers import NaiveBayesClassifier

cadena =""
for i in range(1,len(sys.argv)):
	cadena =cadena + sys.argv[i] +" "


with open('datos.json','r') as fp:
	cl = NaiveBayesClassifier(fp,format="json")

print(cl.classify(cadena))


