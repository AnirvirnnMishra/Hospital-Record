import sqlite3
import crypt
obj=sqlite3.connect('Hospital.db')
query=obj.cursor()

def CreatePatientTable():
    query.execute('''CREATE TABLE if not exists Patient
             (Name text, Age text, Address text, Information text,AadharID text,VisitorId text,
             City text,MobileNumber text, Prescription text)''')

def CreatePrivateTable():
    query.execute('''CREATE TABLE if not exists Private
             (HashedAadhar text,AadharID text)''')

def InsertRows(lst):
    query.execute('INSERT INTO Private VALUES (?,?)',(crypt.Hashing(lst[4]),lst[4]))
    lst[4]=crypt.Hashing(lst[4])
    query.execute('INSERT INTO Patient VALUES (?,?,?,?,?,?,?,?,?)',(lst))
    obj.commit()

def GetRowWithAadharno(aadharID):
    aadharID=crypt.Hashing(aadharID)
    row=query.execute('Select * from Patient where AadharID= ?',(aadharID,))
    return row

def GetAllRows():
    lst=[]
    for row in query.execute('SELECT * FROM Patient order by Name'):
        lst.append(row)
    return lst
"""
def DelLastrow():
    query.execute('''delete from Private where HashedAadhar=(select AadharID from Patient 
     where VisitorID=(select max(VisitorID) from Patient))''')

    query.execute('''delete from Patient  where VisitorID=(select max(VisitorID) from Patient)''')
    print("deleted Last Entry")
    obj.commit()"""
 
def DelAadharID(AadharID):
    AadharID_Hash=crypt.Hashing(AadharID)
    query.execute("delete from Patient where AadharId=?",(AadharID_Hash,))
    query.execute("delete from Private where AadharId=?",(AadharID,))
    print("Deleted AadharID ",AadharID)
    print(obj.Warning())
    obj.commit()

def GetLastVisitorId():
    position=query.execute('select VisitorId from Patient where VisitorId=(select max(VisitorId) from Patient)')
    for i in position:
        last=i
    return last[-1] 

obj.commit()

