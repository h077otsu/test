#Makefile for main.c
main: main.c
	gcc -Wall -O -o main main.c -lm

clean:
	rm main *~
