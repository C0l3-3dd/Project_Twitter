import sys
from textblob.classifiers import NaiveBayesClassifier


with open('datos.json','r') as fp:
	cl = NaiveBayesClassifier(fp,format="json")

print(cl.classify(sys.argv))


