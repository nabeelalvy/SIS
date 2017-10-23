"""student/teacher"""

import sys
import os
#path=os.getcwd()
path="C:\\xampp\\htdocs\\SIS\\application\\controllers\\cc.txt"

filex=open(path,"w+")

def std_teacher_ratio(std_teacher):

    scale_ratio = 100
    if std_teacher>100:
        return 1
    if std_teacher<10:
        return 10
    else:
        std_teacher_weightage =  scale_ratio/std_teacher
        return std_teacher_weightage


# Area

def area(no_of_marla):

    scale_no_marla = 10
    scale_area = 100
    if no_of_marla>100:
        return 10
    if no_of_marla<10:
        return 1
    else:
        Area = ((no_of_marla * scale_no_marla) / scale_area) - (((no_of_marla * scale_no_marla) / scale_area) * 0.15)
        return Area
# No. of Labs

def labs(no_of_labs):
    scale_labs = 2.5
    if (no_of_labs>4):
        return 10
    else:
        return (scale_labs * no_of_labs)
# Library

def library(val):
    if (val==1):
        return 10
    else:
        return 0


def no_of_branches(no_of_branchess):
    branch_constant = 0.5
    if no_of_branchess > 20:
        return 10
    else:
        return no_of_branchess*branch_constant


def average_fee(avg_fee):
    if avg_fee >=1000:
        if avg_fee <= 3000:
            return 10
    if avg_fee >= 3500:
        if avg_fee <= 6000:
            return 5
    if avg_fee >=6500:
         return 1


def average_board_marks(avg_board_marks):
    if avg_board_marks>=1000:
        return 40
    if avg_board_marks >= 950:
        if avg_board_marks <1000:
            return 36
    if avg_board_marks >= 900:
        if avg_board_marks < 950:
            return 32
    if avg_board_marks >= 850:
        if avg_board_marks < 900:
            return 28
    if avg_board_marks >= 800:
        if avg_board_marks <850:
            return 24
    if avg_board_marks >= 750:
        if avg_board_marks <80:
            return 20
    if avg_board_marks >= 700:
        if avg_board_marks <750:
            return 16
    if avg_board_marks >= 650:
        if avg_board_marks <700:
            return 12
    if avg_board_marks >= 600:
        if avg_board_marks <650:
            return 8
    if avg_board_marks >= 500:
        if avg_board_marks <600:
            return 4


print(area(100))
print(std_teacher_ratio(30))
print (labs(3))
print (library(1))
print (no_of_branches(5))
print(average_fee(3500))
print(average_board_marks(930))
def main():
    filex.write(
    (str(area(int(sys.argv[1])) + std_teacher_ratio(int(sys.argv[2])) + labs(int(sys.argv[3])) + library(int(sys.argv[4])) + no_of_branches(int(sys.argv[5])) + average_fee(int(sys.argv[6])) + average_board_marks(int(sys.argv[7])))))



main()
