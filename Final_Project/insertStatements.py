# Opens the spectrometer reading file
file = open("spec.csv", "r")

# Reads the file by line
line = file.readline()

# Iterates through each line in the file while striping it 
# to form the insert statements
while(line):
    print("INSERT INTO specReading VALUES(" + line.rstrip() + ");")
    line = file.readline()
