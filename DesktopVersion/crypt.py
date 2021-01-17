from cryptography.fernet import Fernet
import hashlib
#secure hash algorithm

def Hashing(text):
    # takes string and converts it into the byte equivalent using encode() so that it can be accepted by the hash function.
    result = hashlib.sha256(text.encode())
    return result.hexdigest()#hexadecimal equivalent encoded string

def Encrypt(text):
    global GeneratedKey
    key=GeneratedKey
    F_obj=Fernet(key)
    encrypted_data=F_obj.encrypt(bytes(text,encoding='utf-32'))
    return encrypted_data

def Decrypt(text):
    global GeneratedKey
    key=GeneratedKey
    F_obj=Fernet(key)
    decrypted_data=F_obj.decrypt(text)
    return str(decrypted_data,encoding="utf-32")

f=open('Key.txt','r')  
GeneratedKey=bytes(f.read()[1:],encoding='utf-32')


'''hashlib was used for storing hashed value of aadharcard bcz previously aadhar encryption at insertion was done
easily but while fetching the results encryption of same aadharid was difficult'''