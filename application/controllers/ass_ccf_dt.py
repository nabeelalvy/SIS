import sys
import os
#path=os.getcwd()
path="C:\\xampp\\htdocs\\SIS\\application\\controllers\\cc.txt"

filex=open(path,"w")
listx=[]
listx1=[]
listx.append(str(sys.argv[1]))
listx.append(str(sys.argv[2]))
listx.append(str(sys.argv[3]))
listx1.append(int(sys.argv[4]))
listx1.append(int(sys.argv[5]))
listx1.append(int(sys.argv[6]))
listx1.append(int(sys.argv[7]))
listx.append('')

header = ["gender", "hobbies", "skills", "maths", "bio", "chem", "phy", "label"]
training_data = [
        ['M', 'Music', 'Technical', 94, 90, 80, 96, 'E'],
        ['M', 'Writing', 'Persuasive', 90, 91, 87, 94, 'E'],
        ['F', 'Reading', 'Entrepreneurial', 87, 92, 80, 90, 'M'],
        ['F', 'Music', 'Technical', 85, 93, 75, 85, 'M'],
        ['F', 'Travelling', 'Persuasive', 88, 85, 70, 91, 'E'],
        ['M', 'Reading', 'Persuasive', 83, 89, 72, 93, 'M'],
    ]

def unique_vals(rows, col):
    return set([row[col] for row in rows])



def class_counts(rows):
    counts = {}
    for row in rows:
        label = row[-1]
        if label not in counts:
            counts[label] = 0
        counts[label] += 1
    return counts


def is_numeric(value):
    return isinstance(value, int) or isinstance(value, float)


class Question(object):

    def __init__(self, column, value):
        self.column = column
        self.value = value

    def match(self, example):
        val = example[self.column]
        if is_numeric(val):
            return val >= self.value
        else:
            return val == self.value

    def __repr__(self):
        condition = "=="
        if is_numeric(self.value):
            condition = ">="
        return "Is %s %s %s?" % (
            header[self.column], condition, str(self.value))

def partition(rows, question):
    true_rows, false_rows = [], []
    for row in rows:
        if question.match(row):
            true_rows.append(row)
        else:
            false_rows.append(row)
    return true_rows, false_rows
true_rows, false_rows = partition(training_data, Question(7, 'E'))

def gini(rows):
    counts = class_counts(rows)
    impurity = 1
    for lbl in counts:
        prob_of_lbl = counts[lbl] / float(len(rows))
        impurity -= prob_of_lbl**2
    return impurity

def info_gain(left, right, current_uncertainty):
    p = float(len(left)) / (len(left) + len(right))
    return current_uncertainty - p * gini(left) - (1 - p) * gini(right)





def find_best_split(rows):
    best_gain = 0
    best_question = None
    current_uncertainty = gini(rows)
    n_features = len(rows[0]) - 1

    for col in range(n_features):

        values = set([row[col] for row in rows])
        for val in values:

            question = Question(col, val)


            true_rows, false_rows = partition(rows, question)

            if len(true_rows) == 0 or len(false_rows) == 0:
                continue

            gain = info_gain(true_rows, false_rows, current_uncertainty)

            if gain >= best_gain:
                best_gain, best_question = gain, question

    return best_gain, best_question




class Leaf:
    def __init__(self, rows):
        self.predictions = class_counts(rows)

class Decision_Node:

    def __init__(self,
                 question,
                 true_branch,
                 false_branch):
        self.question = question
        self.true_branch = true_branch
        self.false_branch = false_branch

def build_tree(rows):
    gain, question = find_best_split(rows)

    if gain == 0:
        return Leaf(rows)

    true_rows, false_rows = partition(rows, question)

    true_branch = build_tree(true_rows)

    false_branch = build_tree(false_rows)

    return Decision_Node(question, true_branch, false_branch)

def print_tree(node, spacing=""):
    if isinstance(node, Leaf):
        print (spacing + "Predict", node.predictions)
        return

    print (spacing + str(node.question))

    print (spacing + '--> True:')
    print_tree(node.true_branch, spacing + "  ")

    print (spacing + '--> False:')
    print_tree(node.false_branch, spacing + "  ")



def classify(row, node):
    if isinstance(node, Leaf):
        return node.predictions

    if node.question.match(row):
        return classify(row, node.true_branch)
    else:
        return classify(row, node.false_branch)



def print_leaf(counts):
    total = sum(counts.values()) * 1.0
    probs = {}
    for lbl in counts.keys():
        probs[lbl] = str(int(counts[lbl] / total * 100)) + "%"
    return probs



def result(prediction):
    if 'E' in prediction:
        return 0
    if 'M' in prediction:
        return 1
    else:
        return -1





def main():

    print(training_data)
    print(unique_vals(training_data, 7))
    print(class_counts(training_data))
    current_uncertainty = gini(training_data)
    true_rows, false_rows = partition(training_data, Question(6, 91))
    print(info_gain(true_rows, false_rows, current_uncertainty))
    best_gain, best_question = find_best_split(training_data)
    print(best_question)
    print(best_gain)

    my_tree = build_tree(training_data)
    print_tree(my_tree)

    testing_data = [
    [listx[0], listx[1], listx[2], listx1[0], listx1[1], listx1[2], listx1[3], listx[3]],
]

    for row in testing_data:
        if 'E' in print_leaf(classify(row,my_tree)):
            filex.write ("0")
        if 'M' in print_leaf(classify(row,my_tree)):
            filex.write ("1")
    return -1
    




print(main())
