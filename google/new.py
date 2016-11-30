from geolocation.google_maps import GoogleMaps

google_maps = GoogleMaps(api_key='AIzaSyBXW--FnarS7Ype4a0WZPTV-JVpHpIwPHA') 

f=open('E:/city.txt','a+')

for line in open('e:\\project\\Data\\000\\Trajectory\\a.plt'):

		lat = line.split()[0]
		lng = line.split()[1]
		
		my_location = google_maps.search(lat=lat, lng=lng).first()  


		print(my_location.city)
		print(my_location.route)
		print(my_location.street_number)
		print(my_location.postal_code)
		
		f.write(my_location.city+'  ')
		f.write(str(my_location.route)+'  ')
		f.write(my_location.postal_code+'\n')
		f.write(my_location.street_number+' \n')
		
		



f.close()


#lat = 39.984333
#lng = 116.318417

#print lat
#print lng