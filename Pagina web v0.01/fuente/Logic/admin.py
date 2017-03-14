import sys
sys.path.append("..")
from Logic.objects import User
from Logic.objects import Event


us1=User("jony","123")
print(us1.name)