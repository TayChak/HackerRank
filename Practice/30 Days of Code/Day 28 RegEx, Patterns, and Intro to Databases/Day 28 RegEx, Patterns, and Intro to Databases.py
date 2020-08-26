#!/bin/python3
import math
import os
import random
import re
import sys

if __name__ == '__main__':
    N = int(input())
    rows = []
    reFirstName = re.compile("^[a-z]{1,20}$")
    reEmail = re.compile("^[a-z\\.]{1,40}@gmail.com$")
    for N_itr in range(N):
        firstNameEmailID = input().split()
        firstName = firstNameEmailID[0]
        emailID = firstNameEmailID[1]
        if not reFirstName.match(firstName): continue
        if not reEmail.match(emailID): continue
        rows.append({'firstName':firstName,'emailID':emailID})
    for row in sorted(rows, key=lambda k: k['firstName']):
        print( row['firstName'] )