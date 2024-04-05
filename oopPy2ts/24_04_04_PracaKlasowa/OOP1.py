class QueueError(Exception):  # Choose base class for the new exception.
    pass


class Queue:
    def __init__(self):
        self.storage = []

    def put(self, elem):
        self.storage.append(elem)

    def get(self):
        if len(self.storage) == 0:
            raise QueueError("Queue is empty")
        return self.storage.pop(0)



que = Queue()
que.put(1)
que.put("dog")
que.put(False)
try:
    for i in range(4):
        print(que.get())
except:
    print("Queue error")
