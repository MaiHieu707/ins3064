# Full Adder Circuit Implementation

## Overview
This project implements a digital full adder circuit in Proteus software. The circuit performs binary addition with carry input and produces sum and carry outputs.

## Circuit Components

### Inputs
- **A**: First binary input
- **B**: Second binary input  
- **Ci**: Carry input from previous stage

### Outputs
- **OF**: Output Flag (Sum output)
- **CF**: Carry Flag (Carry output)

### Logic Gates Used
- **2 XOR Gates**: For sum calculation
- **2 AND Gates**: For carry calculation
- **1 OR Gate**: For final carry output

## Circuit Logic

### Sum Calculation
```
Sum (OF) = A ⊕ B ⊕ Ci
```
This is implemented using two XOR gates in cascade:
1. First XOR: A ⊕ B
2. Second XOR: (A ⊕ B) ⊕ Ci

### Carry Calculation
```
Carry (CF) = (A ∧ B) ∨ (Ci ∧ (A ⊕ B))
```
This is implemented using:
1. AND1: A ∧ B
2. AND2: Ci ∧ (A ⊕ B)
3. OR1: (A ∧ B) ∨ (Ci ∧ (A ⊕ B))

## Truth Table

| A | B | Ci | Sum (OF) | Carry (CF) |
|---|---|----| ---------|------------|
| 0 | 0 | 0  |    0     |     0      |
| 0 | 0 | 1  |    1     |     0      |
| 0 | 1 | 0  |    1     |     0      |
| 0 | 1 | 1  |    0     |     1      |
| 1 | 0 | 0  |    1     |     0      |
| 1 | 0 | 1  |    0     |     1      |
| 1 | 1 | 0  |    0     |     1      |
| 1 | 1 | 1  |    1     |     1      |

## Files in This Project

1. **full_adder_circuit.pdsprj** - Main Proteus project file
2. **full_adder_circuit.dsn** - Circuit design file
3. **README.md** - This documentation file
4. **circuit_simulation.py** - Python simulation script for testing

## How to Use in Proteus

1. Open Proteus ISIS (Intelligent Schematic Input System)
2. Load the project file `full_adder_circuit.pdsprj`
3. The circuit will be displayed with all components and connections
4. Use the simulation controls to test different input combinations
5. Observe the outputs OF and CF for verification

## Circuit Layout

```
A ----\     /---- OF (Sum)
       XOR1-XOR2
B ----/     \
             \
Ci ----------/

A ----\
       AND1---\
B ----/        \
                OR1---- CF (Carry)
Ci ----\       /
        AND2--/
       /
(A⊕B)-/
```

## Verification Steps

1. Apply all 8 possible input combinations (000 to 111)
2. Verify outputs match the truth table
3. Check timing relationships if required
4. Validate with oscilloscope or logic analyzer in Proteus

## Circuit Properties

- **Logic Family**: TTL (Transistor-Transistor Logic)
- **Supply Voltage**: 5V
- **Operating Temperature**: 25°C
- **Propagation Delay**: Depends on gate specifications

## Applications

This full adder circuit can be used in:
- Arithmetic Logic Units (ALUs)
- Multi-bit adders (by cascading multiple full adders)
- Digital calculators
- Computer processors
- Binary arithmetic operations

## Notes

- The circuit implements standard full adder logic
- All gates are 2-input gates as specified
- Outputs are clearly labeled as CF (Carry Flag) and OF (Output Flag)
- Circuit is optimized for clarity and educational purposes