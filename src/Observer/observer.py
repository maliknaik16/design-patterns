
from abc import ABC, abstractmethod

from alembic.testing.warnings import setup_filters


class EventListener(ABC):
  @abstractmethod
  def update(self, filename: str, eventType: str):
    raise NotImplementedError


class EmailAlertsListener(EventListener):
  def update(self, filename: str, eventType: str):
    print(f"[{eventType}] Email Alerts on file: {filename}")

class LoggingListener(EventListener):
  def update(self, filename: str, eventType: str):
    print(f"[{eventType}]Logging Alerts on file: {filename}")

class EventManager:

  def __init__(self):
    self.listener = {}

  def subscribe(self, eventType: str, subscriber: EventListener):
    if eventType not in self.listener:
      self.listener[eventType] = set()

    if subscriber not in self.listener[eventType]:
        self.listener[eventType].add(subscriber)

  def unsubscribe(self, eventType: str, subscriber: EventListener):
    if eventType in self.listener and subscriber in self.listener[eventType]:
      self.listener[eventType].remove(subscriber)

  def notify(self, eventType: str, filename: str):
    if eventType in self.listener:
      for s in self.listener[eventType]:
        s.update(filename, eventType)


class Editor:

  def __init__(self):
    self.eventManager = EventManager()

  def openFile(self, filename: str):
    print(f"Opening file: {filename}")
    self.eventManager.notify("open", filename)

  def saveFile(self, filename: str):
    print(f"Saving file: {filename}")
    self.eventManager.notify("save", filename)


if __name__ == "__main__":
  logger = LoggingListener()
  emailAlerts = EmailAlertsListener()

  editor = Editor()
  editor.eventManager.subscribe('open', logger)
  editor.eventManager.subscribe('save', logger)
  editor.eventManager.subscribe('open', emailAlerts)

  editor.openFile('test.txt')
  editor.saveFile('test.txt')

  print('Unsubscribing open logger event')
  editor.eventManager.unsubscribe('open', logger)
  editor.openFile('hello.txt')
