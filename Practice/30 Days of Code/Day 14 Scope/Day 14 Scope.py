class Difference:
    def __init__(self, a):
        self.__elements = a

    # Add your code here
    def computeDifference(self):
        mx = 1
        mn = 100
        for num in self.__elements:
            if( num > mx ): mx = num
            if( num < mn ): mn = num
        self.maximumDifference = mx - mn
# End of Difference class