# DATABASE
a2
# USER
* Username - PRIMARY KEY (UNIQUE)
* Password
* First Name
* Last Name
* Email
# ACCOUNT 
ie. Spending, Cheque, Savings
* Username - FOREIGN KEY
* AccID - PRIMARY KEY (UNIQUE)
* AccName
* AccType
* Balance
# TRANSACTION 
* transAccID - FOREIGN KEY
* transID - PRIMARY KEY (UNIQUE)
* transRef
* transDate
* transTime
* transAmount
* transType(D/W)

