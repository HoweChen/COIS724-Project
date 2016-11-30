import os

print "Calculating the stay points..."
os.system('python ./stay_points.py')
print "Calculating the clusters..."
os.system('python ./cluster.py')
print "Job done."
