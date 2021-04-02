#!/usr/bin/python
import socket
import argparse

parser = argparse.ArgumentParser(description="Sending data to pi")
parser.add_argument("-d", "--data", metavar="", required=True, help="on or off")
args = parser.parse_args()

UDP_IP = "192.168.0.179"
UDP_PORT = 5001

def sendData(MESSAGE):
    sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
    sock.sendto(MESSAGE, (UDP_IP, UDP_PORT))


if __name__ == "__main__":
    sendData(args.data)
