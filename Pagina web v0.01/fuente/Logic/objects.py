
"""elect * from events
where date=date;


insert into events (idevent,desc,date) values (idevent,desc,date);"""

class User:

	def __init__(self, name, passw):
		self.name=name
		self.passw=passw

class Event:
	def __init__(self, desc, date, user):
		self.desc=desc
		self.date=date
		self.user=user
	


us1=User("jony","123")
ev1=Event("este es mi evt", "12-12-12", us1)

print(us1.name)
