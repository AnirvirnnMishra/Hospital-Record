from tkinter import *
from PIL import ImageTk,Image
from pygame import mixer
import tkinter.messagebox as messagebox
from tkinter import PhotoImage
import code
import crypt
import database

correctPassword=False
password='a'

def click():
    '''To play audio after every click.'''
    mixer.music.load('button.mp3')
    mixer.music.play()

def PasswordWindow():
    click()
    '''To create password window visuals'''
    global correctPassword,password
    
    #Exiting Password Window
    def ExitPasswordWindow():
        global correctPassword
        click()
        messagebox.showinfo('TERMINATE',"EXIT PASSWORD WINDOW")
        pswrd.destroy()
        correctPassword=False
        
    #Checking For Password
    def SubmitPassword():
        click()
        global correctPassword,password
        ps=pswrdEntry.get()
        pswrdEntry.delete(0,END)
        if(ps==password):
            correctPassword=True
            pswrd.destroy()
            return
        else:
            messagebox.showinfo('TERMINATE',"INCORRECT PASSWORD")

    def PswrdInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","ENTER YOUR PASSWORD TO CONTINUE")

    pswrd=Tk()
    pswrd.title('Privacy Manager')
    pswrd.geometry('1366x768')

    #To Set Icon For The Password Window
    icon = PhotoImage(file = "icon.png")
    pswrd.iconphoto(False, icon)

    #To Set Background Image On Main Window
    pswrdImage=ImageTk.PhotoImage(Image.open('passwordimg.png'))
    pswrdLabel=Label(image=pswrdImage)
    pswrdLabel.place(x=0,y=0)

    pswrdEntry=Entry(pswrd,width=21,bg='#%02x%02x%02x' % (77,148,255),show='$',borderwidth=5,font=('Public Sans',35))
    pswrdEntry.place(x=93,y=360)
    
    submit=Button(pswrdLabel,text="SUBMIT",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    submit.place(x=92,y=551)
    submit.config(command=lambda: SubmitPassword())

    exits=Button(pswrdLabel,text="EXIT",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=423,y=551)
    exits.config(command=lambda: ExitPasswordWindow())

    instruction=Button(pswrdLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: PswrdInstruction())
    pswrd.mainloop()

def RootWindow():
    '''To create root window visuals'''
    #Exiting Root Window
    def ExitRootWindow():
        click()
        root.destroy()
        main()
    #Popup Instruction Window  
    def RootInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","CLICK HERE: \nREGISTRATION \nSEARCH \nDELETE")

    root=Tk()
    root.title('Get Started')
    root.geometry("1366x768")

    #To Set Icon For The Main Window
    icon = PhotoImage(file = "icon.png")
    root.iconphoto(False, icon)
    
    #To Set Background Image On Main Window
    rootImage=ImageTk.PhotoImage(Image.open('rootimg.png'))
    rootLabel=Label(image=rootImage)
    rootLabel.place(x=0,y=0)

    #To Create Buttons For Further Access Windows
    registration=Button(rootLabel,text="CLICK HERE FOR REGISTRATION",height=1,width=28,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','24'),bd=10)
    registration.place(x=93,y=158)

    search=Button(rootLabel,text="CLICK HERE TO SEARCH RECORD",height=1,width=28,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','24'),bd=10)
    search.place(x=93,y=353)

    delete=Button(rootLabel,text="CLICK HERE TO DELETE RECORD",height=1,width=28,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','24'),bd=10)
    delete.place(x=94,y=546)

    exits=Button(rootLabel,text="EXIT",height=1,width=7,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=1180,y=617)

    instruction=Button(rootLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)

    def Registration():
        click()
        root.destroy()
        RegistrationWindow()
        return
    def Search():
        click()
        root.destroy()
        SearchWindow()
        return
    def Delete():
        click()
        root.destroy()
        DeleteWindow()
        return

    #Calling Respective Functions When Button Is Clicked
    registration.config(command=lambda: Registration())
    search.config(command=lambda: Search())
    delete.config(command=lambda: Delete())
    exits.config(command=lambda: ExitRootWindow())
    instruction.config(command=lambda: RootInstruction())

    root.mainloop()

def RegistrationWindow():
    '''To create registration window visuals'''
    click()
    #Exiting Registration Window
    def ExitRegistrationWindow():
        click()
        messagebox.showinfo('TERMINATE',"EXIT REGISTRATION WINDOW")
        registration.destroy()
        RootWindow()
        
    #After Submitting Details
    def SubmitDetails():
        click()
        name=nameEntry.get()
        age=ageEntry.get()
        address=addressEntry.get()
        information=informationEntry.get()
        aadhar=aadharEntry.get()
        city=cityEntry.get()
        mobile=mobileEntry.get()
        prescription=prescriptionEntry.get()

        nameEntry.delete(0,END)
        ageEntry.delete(0,END)
        addressEntry.delete(0,END)
        informationEntry.delete(0,END)
        aadharEntry.delete(0,END)
        cityEntry.delete(0,END)
        mobileEntry.delete(0,END)
        prescriptionEntry.delete(0,END)

        code.InputDetails(name,age,address,information,aadhar,city,mobile,prescription)
        

    #Click on Instruction Button
    def RegistrationInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","ENTER DETAILS OF PATIENT AND PRESS SUBMIT")

    registration=Tk()
    registration.title('Registration')
    registration.geometry('1366x768')

    #To Set Icon For The Password Window
    icon = PhotoImage(file = "icon.png")
    registration.iconphoto(False, icon)

    #To Set Background Image On Main Window
    registrationImage=ImageTk.PhotoImage(Image.open('registrationimg.png'))
    registrationLabel=Label(image=registrationImage)
    registrationLabel.place(x=0,y=0)

    nameEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    nameEntry.place(x=119,y=135)
    ageEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    ageEntry.place(x=119,y=275)
    addressEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    addressEntry.place(x=119,y=400)
    informationEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    informationEntry.place(x=123,y=542)

    aadharEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    aadharEntry.place(x=659,y=139)
    cityEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    cityEntry.place(x=659,y=273)
    mobileEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    mobileEntry.place(x=659,y=401)
    prescriptionEntry=Entry(registrationLabel,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    prescriptionEntry.place(x=659,y=544)
    

    submit=Button(registrationLabel,text="SUBMIT",height=1,width=8,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    submit.place(x=957,y=617)
    submit.config(command=lambda: SubmitDetails())

    exits=Button(registrationLabel,text="EXIT",height=1,width=8,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=1157,y=617)
    exits.config(command=lambda: ExitRegistrationWindow())

    instruction=Button(registrationLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: RegistrationInstruction())
    registration.mainloop()

def ShowSearchInformationWindow(lst):
    info=Tk()
    info.title('Information Window')
    info.geometry('1366x768')

    def ExitInfoWindow():
        click()
        messagebox.showinfo('TERMINATE',"EXIT INFORMATION WINDOW")
        namebox.config(state='normal')
        agebox.config(state='normal')
        addressbox.config(state='normal')
        informationbox.config(state='normal')
        aadharbox.config(state='normal')
        citybox.config(state='normal')
        mobilebox.config(state='normal')
        prescriptionbox.config(state='normal')
        info.destroy()
        SearchWindow()
    
    def InfoInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","DISPLAY DETAILS OF PATIENT")

    #To Set Background Image On Main Window
    infoImage=ImageTk.PhotoImage(Image.open('showinfoimg.png'))
    infoLabel=Label(image=infoImage)
    infoLabel.place(x=0,y=0)

    namebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    namebox.place(x=119,y=135)
    agebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    agebox.place(x=119,y=275)
    addressbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    addressbox.place(x=119,y=400)
    informationbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    informationbox.place(x=123,y=542)

    aadharbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    aadharbox.place(x=659,y=139)
    citybox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    citybox.place(x=659,y=273)
    mobilebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    mobilebox.place(x=659,y=401)
    prescriptionbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    prescriptionbox.place(x=659,y=544)

    namebox.insert(END,lst[0])
    agebox.insert(END,lst[1])
    addressbox.insert(END,lst[2])
    informationbox.insert(END,lst[3])
    aadharbox.insert(END,lst[4])
    citybox.insert(END,lst[5])
    mobilebox.insert(END,lst[6])
    prescriptionbox.insert(END,lst[7])

    namebox.config(state=DISABLED)
    agebox.config(state=DISABLED)
    addressbox.config(state=DISABLED)
    informationbox.config(state=DISABLED)
    aadharbox.config(state=DISABLED)
    citybox.config(state=DISABLED)
    mobilebox.config(state=DISABLED)
    prescriptionbox.config(state=DISABLED)

    exits=Button(infoLabel,text="EXIT",height=1,width=7,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=1180,y=617)
    exits.config(command=lambda: ExitInfoWindow())

    instruction=Button(infoLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: InfoInstruction())
    info.mainloop()

def SearchWindow():
    '''To create search window visuals'''
    click()
    #Exiting Search Window
    def ExitSearchWindow():
        click()
        messagebox.showinfo('TERMINATE',"EXIT SEARCH WINDOW")
        search.destroy()
        RootWindow()
        
    #After Submitting Details
    def SearchAadharDetails():
        click()
        aadhar=aadharEntry.get()
        aadharEntry.delete(0,END)
        lst=code.InformationByAadhar(aadhar)
        if(lst==False):
            messagebox.showwarning('WARNING','INVALID CREDENTIALS')
            return
        else:
            search.destroy()
            ShowSearchInformationWindow(lst)
        
    #Click on Instruction Button
    def SearchInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","ENTER AADHAR OF PATIENT AND PRESS SUBMIT")

    search=Tk()
    search.title('Search Window')
    search.geometry('1366x768')

    #To Set Icon For The Password Window
    icon = PhotoImage(file = "icon.png")
    search.iconphoto(False, icon)

    #To Set Background Image On Main Window
    searchImage=ImageTk.PhotoImage(Image.open('searchimg.png'))
    searchLabel=Label(image=searchImage)
    searchLabel.place(x=0,y=0)

    aadharEntry=Entry(searchLabel,width=21,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',35))
    aadharEntry.place(x=93,y=360)

    submit=Button(searchLabel,text="SEARCH",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    submit.place(x=92,y=551)
    submit.config(command=lambda: SearchAadharDetails())

    exits=Button(searchLabel,text="EXIT",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=423,y=551)
    exits.config(command=lambda: ExitSearchWindow())

    instruction=Button(searchLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: SearchInstruction())
    search.mainloop()
    #We have to create one text box also

def ShowDeleteInformationWindow(lst):
    info=Tk()
    info.title('Information Window')
    info.geometry('1366x768')

    def ExitInfoWindow():
        click()
        messagebox.showinfo('TERMINATE',"EXIT INFORMATION WINDOW")
        namebox.config(state='normal')
        agebox.config(state='normal')
        addressbox.config(state='normal')
        informationbox.config(state='normal')
        aadharbox.config(state='normal')
        citybox.config(state='normal')
        mobilebox.config(state='normal')
        prescriptionbox.config(state='normal')
        info.destroy()
        DeleteWindow()
    
    def InfoInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","DISPLAY DETAILS OF PATIENT")

    #To Set Background Image On Main Window
    infoImage=ImageTk.PhotoImage(Image.open('showinfoimg.png'))
    infoLabel=Label(image=infoImage)
    infoLabel.place(x=0,y=0)

    namebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    namebox.place(x=119,y=135)
    agebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    agebox.place(x=119,y=275)
    addressbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    addressbox.place(x=119,y=400)
    informationbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    informationbox.place(x=123,y=542)

    aadharbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    aadharbox.place(x=659,y=139)
    citybox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    citybox.place(x=659,y=273)
    mobilebox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    mobilebox.place(x=659,y=401)
    prescriptionbox=Text(infoLabel,height=1,width=24,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',22))
    prescriptionbox.place(x=659,y=544)

    namebox.insert(END,lst[0])
    agebox.insert(END,lst[1])
    addressbox.insert(END,lst[2])
    informationbox.insert(END,lst[3])
    aadharbox.insert(END,lst[4])
    citybox.insert(END,lst[5])
    mobilebox.insert(END,lst[6])
    prescriptionbox.insert(END,lst[7])

    namebox.config(state=DISABLED)
    agebox.config(state=DISABLED)
    addressbox.config(state=DISABLED)
    informationbox.config(state=DISABLED)
    aadharbox.config(state=DISABLED)
    citybox.config(state=DISABLED)
    mobilebox.config(state=DISABLED)
    prescriptionbox.config(state=DISABLED)

    exits=Button(infoLabel,text="EXIT",height=1,width=7,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=1180,y=617)
    exits.config(command=lambda: ExitInfoWindow())

    instruction=Button(infoLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: InfoInstruction())
    info.mainloop()

def DeleteWindow():
    '''To create delete window visuals'''
    #Exiting Delete Window
    def ExitDeleteWindow():
        click()
        messagebox.showinfo('TERMINATE',"EXIT DELETE WINDOW")
        delete.destroy()
        RootWindow()

    def DeleteAadharDetails():
        click()
        aadhar=aadharEntry.get()
        aadharEntry.delete(0,END)
        lst=code.DeleteByAadhar(aadhar)
        messagebox.showinfo('DELETE WINDOW','ROW DELETED SUCCESSFULLY')

    #After Submitting Details
    def SearchAadharDetails():
        click()
        aadhar=aadharEntry.get()
        aadharEntry.delete(0,END)
        lst=code.InformationByAadhar(aadhar)
        if(lst==False):
            messagebox.showwarning('WARNING','INVALID CREDENTIALS')
            return
        else:
            delete.destroy()
            ShowDeleteInformationWindow(lst)

    #Click on Instruction Button
    def DeleteInstruction():
        click()
        messagebox.showinfo("INSTRUCTION","ENTER AADHAR OF PATIENT AND PRESS SEARCH")

    delete=Tk()
    delete.title('Delete Window')
    delete.geometry('1366x768')

    #To Set Icon For The Password Window
    icon = PhotoImage(file = "icon.png")
    delete.iconphoto(False, icon)

    #To Set Background Image On Main Window
    deleteImage=ImageTk.PhotoImage(Image.open('deleteimg.png'))
    deleteLabel=Label(image=deleteImage)
    deleteLabel.place(x=0,y=0)

    aadharEntry=Entry(deleteLabel,width=21,bg='#%02x%02x%02x' % (77,148,255),borderwidth=5,font=('Public Sans',35))
    aadharEntry.place(x=93,y=360)

    submit=Button(deleteLabel,text="SEARCH",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    submit.place(x=92,y=551)
    submit.config(command=lambda: SearchAadharDetails())

    exits=Button(deleteLabel,text="EXIT",height=1,width=7,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    exits.place(x=1180,y=617)
    exits.config(command=lambda: ExitDeleteWindow())

    deleted=Button(deleteLabel,text="DELETE",height=1,width=12,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),bg='#%02x%02x%02x' % (169,93,213),font=('Ashcan BB','22'),bd=10)
    deleted.place(x=423,y=551)
    deleted.config(command=lambda: DeleteAadharDetails())

    instruction=Button(deleteLabel,text='i',height=1,width=3,activebackground='#%02x%02x%02x' % (172,57,115),\
        activeforeground='#%02x%02x%02x' % (77,148,255),font=('Ashcan BB','17'),bg='#%02x%02x%02x' % (169,93,213),bd=10)
    instruction.place(x=1258,y=53)
    instruction.config(command=lambda: DeleteInstruction())
    delete.mainloop()

##################################################################################################

#Initializing Mixer To Play Click Sound
def main():
    mixer.init()
    PasswordWindow()
    if(correctPassword==True):
        RootWindow()
    
main()
database.obj.commit()
database.obj.close()