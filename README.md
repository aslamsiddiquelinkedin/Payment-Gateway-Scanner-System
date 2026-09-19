Payment Gateway Scanner System — Process Flow

This payment gateway scanner system automates QR code transaction management. When a QR code is added, the system automatically begins processing transactions against it. Once the transaction amount reaches the predefined maximum limit, the QR status is automatically updated to Settled.

If an issue is detected with a QR code (such as a failure or suspension), the transaction is marked as Failed or Cancelled. Meanwhile, if additional transactions are initiated on a QR code that is already at capacity, they are queued and marked as Pending. This ensures smooth, continuous transaction flow while maintaining full control over each scanner's usage limits.

<img width="1365" height="287" alt="image" src="https://github.com/user-attachments/assets/a87f9dfd-7613-4282-8a7a-c60382656f24" />
