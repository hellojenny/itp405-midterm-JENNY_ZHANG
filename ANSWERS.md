## Question 2
Explain potential problems that could arise with respect to the number of queries being executed. How might you solve it?

Currently, the books are being lazy loaded, which means they are not hydrated with related models right away. This is a small data set so it is okay, but the performance is n+1 because for each query it is retrieving the each entry in three models. To solve this, I could eager load instead, using the with() hydration technique.