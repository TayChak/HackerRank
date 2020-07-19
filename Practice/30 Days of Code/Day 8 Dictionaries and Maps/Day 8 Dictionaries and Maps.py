# Enter your code here. Read input from STDIN. Print output to STDOUT
N = int(input())
phoneBook = {}
for _ in range(N):
    name, phoneNumber = input().split()
    phoneBook[name] = phoneNumber
while True:
    try:
        query = input()
    except:
        break
    if query in phoneBook:
        print( query + "=" + phoneBook[query] )
    else:
        print( "Not found" )