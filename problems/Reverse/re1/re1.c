#include<stdio.h>
#include<stdlib.h>
#include<string.h>

unsigned char toCmp[38] = {
	0x72,0x55,0x6c,0x6a,0x70,0x6c,0x7d,0x7e,
	0x69,0x64,0x62,0x68,0x62,0x64,0x51,0x6a,
	0x7f,0x68,0x4d,0x66,0x66,0x74,0x49,0x72,
	0x77,0x6a,0x78,0x44,0x7d,0x78,0x6a,0x6a,
	0x46,0x48,0x4e,0x56,0x59,0x04,
};
char input[40];

int main(int argc, char** argv) {
	scanf("%s", input);
	if (strlen(input) != 38) {
		printf("You lost!\n");
		exit(0);
	}
	char to[38];
	//const char* flag = "Trinity{machine_you_are_so_beautiful!}";
	for (int i = 0; i < 19; i++) {
		to[2 * i] = input[2 * i + 1];
		to[2 * i + 1] = input[2 * i];
	}

	for (int i = 0; i < 38; i++) {
		to[i] ^= i;
	}
	int i = 0;
	for (i = 0; i < 38; i++) {
		if (to[i] != toCmp[i]) {
			break;
		}
	}
	if (i == 38) {
		printf("You win!Your flag is\n");
		printf("%s\n", input);
	}
}