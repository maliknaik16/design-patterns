
from abc import ABC, abstractmethod

class PaymentStrategy(ABC):
  @abstractmethod
  def pay(self, amount):
    raise NotImplementedError

class CreditCardPaymentStrategy(PaymentStrategy):
  def pay(self, amount):
    print(f'Processing credit card payment: {amount}')

class VenmoPaymentStrategy(PaymentStrategy):
  def pay(self, amount):
    print(f'Processing Venmo payment: {amount}')

class DebitCardPaymentStrategy(PaymentStrategy):
  def pay(self, amount):
    print(f'Processing debit card: {amount}')

class PaymentProcessor:
  def __init__(self, payment_strategy):
    self.payment_strategy = payment_strategy

  def process(self, amount):
    self.payment_strategy.pay(amount)


if __name__ == '__main__':
  loop = True

  while loop:
    print('Please select a payment method:')
    print('\t1. Credit card')
    print('\t2. Venmo')
    print('\t3. Debit card')

    selected_method = int(input())

    if selected_method <= 0 or selected_method > 3:
      print('Please select a valid payment method.')
      loop = True
    else:
      loop = False

    strategy = CreditCardPaymentStrategy()

    if selected_method == 2:
      strategy = VenmoPaymentStrategy()
    elif selected_method == 3:
      strategy = DebitCardPaymentStrategy()

    processor = PaymentProcessor(strategy)
    processor.process(amount=100)
