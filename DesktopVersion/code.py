import database
import crypt

class Patient:
    try:
        if(int(database.GetLastVisitorId())>100):
            visitorId=int(database.GetLastVisitorId())
    except Exception:
        visitorId=100

    def  __init__(self,name,age,address,information,aadhar,city,mobileno,prescription):
        Patient.visitorId+=1
        self.__Name=name 
        self.__Age=age 
        self.__Address=address 
        self.__Information=information 
        self.__AadharId=aadhar 
        self.__VisitorId=str(Patient.visitorId)
        self.__City=city 
        self.__MobileNo=mobileno 
        self.__Prescription=prescription


    def SetName(self,name):
        self.__Name=name 
    def SetAge(self,age):
        self.__Age=age 
    def SetAddress(self,address):
        self.__Address=address 
    def SetInformation(self,information):
        self.__Information=information 
    def SetAadhar(self,aadhar):
        self.__AadharId=aadhar 
    def SetCity(self,city):
        self.__City=city 
    def SetMobileNo(self,mobileno):
        self.__MobileNo=mobileno   
    def SetPrescription(self,prescription):
        self.__Prescription=prescription

    def GetName(self):
        return self.__Name 
    def GetAge(self):
        return self.__Age 
    def GetAddress(self):
        return self.__Address 
    def GetInformation(self):
        return self.__Information 
    def GetAadhar(self):
        return self.__AadharId 
    def GetCity(self):
        return self.__City 
    def GetMobileNo(self):
        return self.__MobileNo 
    def GetVisitorId(self):
        return self.__VisitorId
    def GetPrescription(self):
        return self.__Prescription

def PatientObject(name,age,address,information,aadhar,city,mobileno,prescription):
    while(len(aadhar)!=3):
        aadhar=input("Enter Aadhar Once More")
    while(len(mobileno)!=3):
        mobileno=input("Enter Mobile Number Once More")
    information=crypt.Encrypt(information)
    obj=Patient(name,age,address,information,aadhar,city,mobileno,prescription)
    return obj

def InputDetails(name,age,address,information,aadhar,city,mobileno,prescription):
    objec=PatientObject(name,age,address,information,aadhar,city,mobileno,prescription)
    lst=[objec.GetName(),objec.GetAge(),objec.GetAddress(),objec.GetInformation(),objec.GetAadhar(),
    objec.GetVisitorId(),objec.GetCity(),objec.GetMobileNo(),objec.GetPrescription()]
    database.InsertRows(lst)

def InformationByAadhar(aadharInp):
    result=[]
    lst=database.GetRowWithAadharno(aadharInp)
    for i in lst:
        result.append(i)
    try:
        result=list(result[0])
        result[3]=aadharInp
    except Exception:
        return False
    else:
        return result

def DeleteByAadhar(aadharInp):
    lst=InformationByAadhar(aadharInp)
    database.DelAadharID(aadharInp)
    return lst

#################################################################################################   
database.CreatePatientTable()
database.CreatePrivateTable()



