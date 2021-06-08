# -*- coding: utf-8 -*-
"""
Editor de Spyder

Este es un archivo temporal.
"""
# -*- coding: utf-8 -*-
"""
Editor de Spyder

Este es un archivo temporal.
"""

from textblob.classifiers import NaiveBayesClassifier


with open('datos.json','r') as fp:
	cl = NaiveBayesClassifier(fp,format="json")

print(cl.classify("Es una vergüenza lo que está haciendo este sr que se dice presidente"))
print(cl.classify("Te amo AMLO"))
print(cl.classify("eres el mejor presidente"))

