let a=confirm("🙏Thanku For Visiting 🙏")
if(a==1)
{
    let name=prompt("What is your name ?");
    let name2="welcome "+name;
    document.getElementById("enter").innerHTML = name2;
}
else{
    window.close();
}
